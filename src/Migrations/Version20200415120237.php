<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200415120237 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cv_competence');
        $this->addSql('ALTER TABLE cv CHANGE type_id type_id INT DEFAULT NULL, CHANGE date_sortie date_sortie DATE NOT NULL');
        $this->addSql('ALTER TABLE messages_internes CHANGE entreprise entreprise VARCHAR(100) DEFAULT NULL, CHANGE visible_on_site visible_on_site SMALLINT DEFAULT NULL, CHANGE date_confirm date_confirm DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cv_competence (cv_id INT NOT NULL, competence_id INT NOT NULL, niveau INT NOT NULL, INDEX IDX_EB22FDEDCFE419E2 (cv_id), INDEX IDX_EB22FDED15761DAB (competence_id), PRIMARY KEY(cv_id, competence_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE cv_competence ADD CONSTRAINT FK_EB22FDED15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cv_competence ADD CONSTRAINT FK_EB22FDEDCFE419E2 FOREIGN KEY (cv_id) REFERENCES cv (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cv CHANGE type_id type_id INT DEFAULT NULL, CHANGE date_sortie date_sortie DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messages_internes CHANGE entreprise entreprise VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE visible_on_site visible_on_site SMALLINT DEFAULT NULL, CHANGE date_confirm date_confirm DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }
}
