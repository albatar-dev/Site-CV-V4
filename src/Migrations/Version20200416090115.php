<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200416090115 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cv CHANGE type_id type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cv_competence CHANGE cv_id cv_id INT DEFAULT NULL, CHANGE competence_id competence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE infos_perso ADD mobilit VARCHAR(255) DEFAULT NULL, DROP mobilité, CHANGE permis permis VARCHAR(255) DEFAULT NULL, CHANGE disponibilité disponibilité VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messages_internes CHANGE prenom prenom VARCHAR(100) DEFAULT NULL, CHANGE entreprise entreprise VARCHAR(100) DEFAULT NULL, CHANGE titre_message titre_message VARCHAR(100) DEFAULT NULL, CHANGE visible_on_site visible_on_site TINYINT(1) NOT NULL, CHANGE date_post date_post DATETIME NOT NULL, CHANGE date_confirm date_confirm DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cv CHANGE type_id type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cv_competence CHANGE cv_id cv_id INT DEFAULT NULL, CHANGE competence_id competence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE infos_perso ADD mobilité VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, DROP mobilité, CHANGE permis permis VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE disponibilité disponibilité VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messages_internes CHANGE prenom prenom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE entreprise entreprise VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE titre_message titre_message VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE visible_on_site visible_on_site SMALLINT DEFAULT NULL, CHANGE date_post date_post DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE date_confirm date_confirm DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }
}
