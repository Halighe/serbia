<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240919055303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE broadcast CHANGE link link VARCHAR(1000) DEFAULT NULL, CHANGE poster poster VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE participant DROP INDEX user_id, ADD UNIQUE INDEX UNIQ_D79F6B11A76ED395 (user_id)');
        $this->addSql('ALTER TABLE participant CHANGE city city VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B11A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON participant (email)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE requested_at requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE expires_at expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE broadcast CHANGE link link VARCHAR(255) DEFAULT NULL, CHANGE poster poster VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE participant DROP INDEX UNIQ_D79F6B11A76ED395, ADD INDEX user_id (user_id)');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B11A76ED395');
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_USERNAME ON participant');
        $this->addSql('ALTER TABLE participant CHANGE city city VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT NOT NULL, CHANGE requested_at requested_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE expires_at expires_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
