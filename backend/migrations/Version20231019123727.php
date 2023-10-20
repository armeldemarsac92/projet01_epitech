<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019123727 extends AbstractMigration
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
    }
}
