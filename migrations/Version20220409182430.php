<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409182430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_773DE69D362B62A0');
        $this->addSql('CREATE TEMPORARY TABLE __temp__car AS SELECT id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment FROM car');
        $this->addSql('DROP TABLE car');
        $this->addSql('CREATE TABLE car (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, episode_id INTEGER NOT NULL, car_nr INTEGER NOT NULL, brand VARCHAR(50) NOT NULL, type VARCHAR(60) DEFAULT NULL, ccm NUMERIC(3, 1) DEFAULT NULL, hp INTEGER DEFAULT NULL, km INTEGER DEFAULT NULL, year INTEGER DEFAULT NULL, ps1 NUMERIC(5, 1) DEFAULT NULL, ps2 NUMERIC(5, 1) DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_773DE69D362B62A0 FOREIGN KEY (episode_id) REFERENCES episode (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO car (id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment) SELECT id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment FROM __temp__car');
        $this->addSql('DROP TABLE __temp__car');
        $this->addSql('CREATE INDEX IDX_773DE69D362B62A0 ON car (episode_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_773DE69D362B62A0');
        $this->addSql('CREATE TEMPORARY TABLE __temp__car AS SELECT id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment FROM car');
        $this->addSql('DROP TABLE car');
        $this->addSql('CREATE TABLE car (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, episode_id INTEGER NOT NULL, car_nr INTEGER NOT NULL, brand VARCHAR(50) NOT NULL, type VARCHAR(60) DEFAULT NULL, ccm NUMERIC(3, 1) DEFAULT NULL, hp INTEGER DEFAULT NULL, km INTEGER DEFAULT NULL, year INTEGER DEFAULT NULL, ps1 NUMERIC(5, 1) DEFAULT NULL, ps2 NUMERIC(5, 1) DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO car (id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment) SELECT id, episode_id, car_nr, brand, type, ccm, hp, km, year, ps1, ps2, comment FROM __temp__car');
        $this->addSql('DROP TABLE __temp__car');
        $this->addSql('CREATE INDEX IDX_773DE69D362B62A0 ON car (episode_id)');
    }
}
