<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Episode;
use App\Form\EpisodeType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class EpisodeController extends AbstractController
{
    private EntityManagerInterface $em;
    private ValidatorInterface $validator;


    public function __construct(EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->validator = $validator;

    }
    #[Route('/api/episodes', name: 'episode_api', methods: ['GET'])]
    public function api(): Response
    {
        $episodes = $this->em->getRepository(Episode::class)->findAll();
        if(!$episodes) {
            return $this->json(['success' => false], 400);
        }

        $data = [
            'success' => true,
            'episodes' => $episodes,
        ];

        return $this->json($data);
    }

    #[Route('/episodes/list', name: 'episode_list')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('episode/list.html.twig', [
            'episodes' => $this->em->getRepository(Episode::class)->findBy([], ['episodeNr' => 'DESC']),
        ]);
    }

    #[Route('/episode/add', name: 'episode_add')]
    #[IsGranted('ROLE_ADMIN')]
    public function add(Request $request): Response
    {
        $episode = new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $episode = $form->getData();

            $error = $this->validator->validate($episode);

            if(count($error) > 0) {
                $errorMessages = [];
                /** @var ConstraintViolation $violation */
                foreach ($error as $violation) {
                    $errorMessages[] = $violation->getPropertyPath() . ": " . $violation->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errorMessages],  400);
            }

            $this->em->persist($episode);

            $this->em->flush();

            return $this->redirectToRoute('episode_list');
        }

        return $this->render('episode/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/episode/edit/{id}', name: 'episode_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit($id, Request $request): Response
    {
        $episode = $this->em->getRepository(Episode::class)->find($id);
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $episode
                ->setEpisodeNr($form->get('episodeNr')->getData())
                ->setTitle($form->get('title')->getData())
                ->setEpisodeUrl($form->get('episodeUrl')->getData())
                ->setThumbnailUrl($form->get('thumbnailUrl')->getData());

            $this->em->flush();

            return $this->redirectToRoute('episode_list');
        }

        return $this->render('episode/edit.html.twig', [
           'form' => $form->createView(),
        ]);
    }

    #[Route('/episode/delete/{id}', name: 'episode_delete')]
    #[IsGranted('ROLE_ADMIN')]
    public function delete($id): Response
    {
        $episode = $this->em->getRepository(Episode::class)->find($id);
        $this->em->remove($episode);
        $this->em->flush();

        return $this->redirectToRoute('episode_list');
    }
}
