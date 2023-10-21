<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231020104558 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate_has_role (id INT AUTO_INCREMENT NOT NULL, candidate_id_id INT NOT NULL, role_id_id INT NOT NULL, INDEX IDX_AB6B13E647A475AB (candidate_id_id), INDEX IDX_AB6B13E688987678 (role_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enterprise_has_role (id INT AUTO_INCREMENT NOT NULL, enterprise_id_id INT NOT NULL, role_id_id INT NOT NULL, INDEX IDX_9C58010E6B311ADA (enterprise_id_id), INDEX IDX_9C58010E88987678 (role_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(10) NOT NULL, role_description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidate_has_role ADD CONSTRAINT FK_AB6B13E647A475AB FOREIGN KEY (candidate_id_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE candidate_has_role ADD CONSTRAINT FK_AB6B13E688987678 FOREIGN KEY (role_id_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE enterprise_has_role ADD CONSTRAINT FK_9C58010E6B311ADA FOREIGN KEY (enterprise_id_id) REFERENCES enterprise (id)');
        $this->addSql('ALTER TABLE enterprise_has_role ADD CONSTRAINT FK_9C58010E88987678 FOREIGN KEY (role_id_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE candidate ADD password VARCHAR(255) DEFAULT NULL, CHANGE candidate_sex candidate_sex VARCHAR(10) DEFAULT NULL, CHANGE candidate_status candidate_status VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE enterprise ADD enterprise_email VARCHAR(255) DEFAULT NULL, ADD password VARCHAR(255) DEFAULT NULL, CHANGE enterprise_localisation enterprise_localisation VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_fdea4d92a97d1ac3 TO IDX_A65E6757A97D1AC3');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_fdea4d9291bd8781 TO IDX_A65E675791BD8781');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate_has_role DROP FOREIGN KEY FK_AB6B13E647A475AB');
        $this->addSql('ALTER TABLE candidate_has_role DROP FOREIGN KEY FK_AB6B13E688987678');
        $this->addSql('ALTER TABLE enterprise_has_role DROP FOREIGN KEY FK_9C58010E6B311ADA');
        $this->addSql('ALTER TABLE enterprise_has_role DROP FOREIGN KEY FK_9C58010E88987678');
        $this->addSql('DROP TABLE candidate_has_role');
        $this->addSql('DROP TABLE enterprise_has_role');
        $this->addSql('DROP TABLE role');
        $this->addSql('ALTER TABLE enterprise DROP enterprise_email, DROP password, CHANGE enterprise_localisation enterprise_localisation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_a65e6757a97d1ac3 TO IDX_FDEA4D92A97D1AC3');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_a65e675791bd8781 TO IDX_FDEA4D9291BD8781');
        $this->addSql('ALTER TABLE candidate DROP password, CHANGE candidate_sex candidate_sex VARCHAR(10) NOT NULL, CHANGE candidate_status candidate_status VARCHAR(100) NOT NULL');
    }
}
