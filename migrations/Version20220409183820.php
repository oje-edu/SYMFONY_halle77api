<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409183820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE car (id INT AUTO_INCREMENT NOT NULL, episode_id INT NOT NULL, car_nr INT NOT NULL, brand VARCHAR(50) NOT NULL, type VARCHAR(60) DEFAULT NULL, ccm NUMERIC(3, 1) DEFAULT NULL, hp INT DEFAULT NULL, km INT DEFAULT NULL, year INT DEFAULT NULL, ps1 NUMERIC(5, 1) DEFAULT NULL, ps2 NUMERIC(5, 1) DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, INDEX IDX_773DE69D362B62A0 (episode_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE episode (id INT AUTO_INCREMENT NOT NULL, episode_nr INT NOT NULL, title VARCHAR(100) NOT NULL, episode_url VARCHAR(255) NOT NULL, thumbnail_url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plate (id INT AUTO_INCREMENT NOT NULL, kz VARCHAR(25) NOT NULL, name VARCHAR(255) NOT NULL, lat NUMERIC(16, 14) NOT NULL, lng NUMERIC(16, 14) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D362B62A0 FOREIGN KEY (episode_id) REFERENCES episode (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D362B62A0');
        $this->addSql('DROP TABLE car');
        $this->addSql('DROP TABLE episode');
        $this->addSql('DROP TABLE plate');
        $this->addSql('DROP TABLE user');
    }
}
