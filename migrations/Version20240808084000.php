<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808084000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, email VARCHAR(100) DEFAULT NULL, phone VARCHAR(25) DEFAULT NULL, question VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE material (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(300) DEFAULT NULL, shorttext VARCHAR(300) DEFAULT NULL, icon VARCHAR(100) DEFAULT NULL, firstpart VARCHAR(2000) DEFAULT NULL, secondpart VARCHAR(2000) DEFAULT NULL, thirdpart VARCHAR(3000) DEFAULT NULL, firstimg VARCHAR(100) DEFAULT NULL, secondimg VARCHAR(100) DEFAULT NULL, firstimgsign VARCHAR(100) DEFAULT NULL, secondimgsign VARCHAR(100) DEFAULT NULL, firstlink VARCHAR(500) DEFAULT NULL, secondlink VARCHAR(500) DEFAULT NULL, pdf VARCHAR(150) DEFAULT NULL, ptx VARCHAR(150) DEFAULT NULL, video VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant (id INT AUTO_INCREMENT NOT NULL, fio VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(25) NOT NULL, city VARCHAR(50) DEFAULT NULL, category VARCHAR(50) DEFAULT NULL, school VARCHAR(50) DEFAULT NULL, adult TINYINT(1) DEFAULT NULL, representative VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partners (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, organisation VARCHAR(100) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, phone VARCHAR(25) NOT NULL, description VARCHAR(500) NOT NULL, logo VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, klass VARCHAR(50) DEFAULT NULL, text VARCHAR(1000) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, video VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE feedback');
        $this->addSql('DROP TABLE material');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE partners');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
