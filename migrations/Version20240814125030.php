<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240814125030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE university (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(300) NOT NULL, shortname VARCHAR(150) DEFAULT NULL, level VARCHAR(5) DEFAULT NULL, city VARCHAR(100) DEFAULT NULL, latitude VARCHAR(50) DEFAULT NULL, longitude VARCHAR(50) DEFAULT NULL, adress VARCHAR(200) DEFAULT NULL, direction VARCHAR(150) DEFAULT NULL, description VARCHAR(1000) DEFAULT NULL, form VARCHAR(100) DEFAULT NULL, url VARCHAR(150) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, foreigners VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE university');
    }
}
