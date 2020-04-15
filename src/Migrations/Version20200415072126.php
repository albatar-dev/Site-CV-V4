<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200415072126 extends AbstractMigration
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
        $this->addSql('ALTER TABLE grade_usr CHANGE grede grade VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messages_internes CHANGE entreprise entreprise VARCHAR(100) DEFAULT NULL, CHANGE visible_on_site visible_on_site SMALLINT DEFAULT NULL, CHANGE date_confirm date_confirm DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cv CHANGE type_id type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE grade_usr CHANGE grade grede VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messages_internes CHANGE entreprise entreprise VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE visible_on_site visible_on_site SMALLINT DEFAULT NULL, CHANGE date_confirm date_confirm DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE grade_usr_id grade_usr_id INT DEFAULT NULL');
    }
}
