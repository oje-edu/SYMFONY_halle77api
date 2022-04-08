<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408145107 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car CHANGE nr car_nr INT NOT NULL');
        $this->addSql('ALTER TABLE episode CHANGE title title VARCHAR(100) NOT NULL, CHANGE episodenr episode_nr INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car CHANGE car_nr nr INT NOT NULL');
        $this->addSql('ALTER TABLE episode CHANGE title title VARCHAR(255) NOT NULL, CHANGE episode_nr episodenr INT NOT NULL');
    }
}
