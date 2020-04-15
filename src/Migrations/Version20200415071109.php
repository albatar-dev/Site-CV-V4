<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200415071109 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cat_cv (id INT AUTO_INCREMENT NOT NULL, ct_cv VARCHAR(255) NOT NULL, cat_cv_image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, titre_comp VARCHAR(50) NOT NULL, niveau_comp VARCHAR(255) NOT NULL, cat_comp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, titre_cv VARCHAR(255) NOT NULL, etablissement VARCHAR(255) NOT NULL, description VARCHAR(50) NOT NULL, date_entree DATE NOT NULL, date_sortie DATE NOT NULL, ville VARCHAR(255) NOT NULL, logo_cv VARCHAR(255) NOT NULL, INDEX IDX_B66FFE92C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv_competence (cv_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_EB22FDEDCFE419E2 (cv_id), INDEX IDX_EB22FDED15761DAB (competence_id), PRIMARY KEY(cv_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade_usr (id INT AUTO_INCREMENT NOT NULL, grede VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeux (id INT AUTO_INCREMENT NOT NULL, projet_id INT NOT NULL, id_projet INT NOT NULL, version VARCHAR(255) NOT NULL, idee VARCHAR(255) NOT NULL, solution VARCHAR(255) NOT NULL, regles VARCHAR(255) NOT NULL, commandes VARCHAR(255) NOT NULL, github_link VARCHAR(255) NOT NULL, projet_link VARCHAR(255) NOT NULL, bdd_link VARCHAR(255) NOT NULL, cahier_charges VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, INDEX IDX_3755B50DC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lafleur_categorie (id INT AUTO_INCREMENT NOT NULL, cat_code VARCHAR(3) NOT NULL, cat_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lafleur_clientconnu (id INT AUTO_INCREMENT NOT NULL, clt_code VARCHAR(5) NOT NULL, clt_nom VARCHAR(30) NOT NULL, clt_adresse VARCHAR(50) NOT NULL, clt_tel VARCHAR(20) NOT NULL, clt_email VARCHAR(50) NOT NULL, clt_mot_passe VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lafleur_commande (id INT AUTO_INCREMENT NOT NULL, cde_moment VARCHAR(20) NOT NULL, cde_client VARCHAR(5) NOT NULL, cde_date VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lafleur_contenir (id INT AUTO_INCREMENT NOT NULL, cde_moment VARCHAR(20) NOT NULL, cde_client VARCHAR(5) NOT NULL, produit VARCHAR(3) NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lafleur_produit (id INT AUTO_INCREMENT NOT NULL, pdt_ref VARCHAR(3) NOT NULL, pdt_designation VARCHAR(50) NOT NULL, pdt_prix NUMERIC(6, 2) NOT NULL, pdt_image VARCHAR(50) NOT NULL, pdt_categorie VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages_internes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, entreprise VARCHAR(100) DEFAULT NULL, mail VARCHAR(100) NOT NULL, titre_message VARCHAR(100) NOT NULL, message VARCHAR(500) NOT NULL, visible_on_site SMALLINT DEFAULT NULL, statut VARCHAR(2) NOT NULL, date_post DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', date_confirm DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projets (id INT AUTO_INCREMENT NOT NULL, titre_projet VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projets_afpa (id INT AUTO_INCREMENT NOT NULL, projet_id INT NOT NULL, version VARCHAR(255) NOT NULL, cahier_charges VARCHAR(500) NOT NULL, solutions VARCHAR(500) NOT NULL, screen VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, github VARCHAR(255) NOT NULL, bdd_link VARCHAR(255) NOT NULL, cahier_charges_link VARCHAR(255) NOT NULL, projet_link VARCHAR(255) NOT NULL, INDEX IDX_7DE38A30C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE screens_jeux (id INT AUTO_INCREMENT NOT NULL, id_jeux_id INT NOT NULL, version_jeux VARCHAR(255) NOT NULL, screen_jeux VARCHAR(255) NOT NULL, INDEX IDX_6719201F32B700A2 (id_jeux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE texte_accueil (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, texte VARCHAR(500) NOT NULL, alert_accueil SMALLINT NOT NULL, position SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, grade_usr_id INT DEFAULT NULL, pseudo_usr VARCHAR(255) NOT NULL, pss_usr VARCHAR(255) NOT NULL, mail_usr VARCHAR(255) NOT NULL, INDEX IDX_8D93D6494EC652E5 (grade_usr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE v2_projet (id INT AUTO_INCREMENT NOT NULL, nom_pjt VARCHAR(255) NOT NULL, screen_pjt VARCHAR(255) NOT NULL, link_pjt VARCHAR(255) NOT NULL, desc_pjt VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE92C54C8C93 FOREIGN KEY (type_id) REFERENCES cat_cv (id)');
        $this->addSql('ALTER TABLE cv_competence ADD CONSTRAINT FK_EB22FDEDCFE419E2 FOREIGN KEY (cv_id) REFERENCES cv (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cv_competence ADD CONSTRAINT FK_EB22FDED15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50DC18272 FOREIGN KEY (projet_id) REFERENCES projets (id)');
        $this->addSql('ALTER TABLE projets_afpa ADD CONSTRAINT FK_7DE38A30C18272 FOREIGN KEY (projet_id) REFERENCES projets (id)');
        $this->addSql('ALTER TABLE screens_jeux ADD CONSTRAINT FK_6719201F32B700A2 FOREIGN KEY (id_jeux_id) REFERENCES jeux (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494EC652E5 FOREIGN KEY (grade_usr_id) REFERENCES grade_usr (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cv DROP FOREIGN KEY FK_B66FFE92C54C8C93');
        $this->addSql('ALTER TABLE cv_competence DROP FOREIGN KEY FK_EB22FDED15761DAB');
        $this->addSql('ALTER TABLE cv_competence DROP FOREIGN KEY FK_EB22FDEDCFE419E2');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494EC652E5');
        $this->addSql('ALTER TABLE screens_jeux DROP FOREIGN KEY FK_6719201F32B700A2');
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DC18272');
        $this->addSql('ALTER TABLE projets_afpa DROP FOREIGN KEY FK_7DE38A30C18272');
        $this->addSql('DROP TABLE cat_cv');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE cv');
        $this->addSql('DROP TABLE cv_competence');
        $this->addSql('DROP TABLE grade_usr');
        $this->addSql('DROP TABLE jeux');
        $this->addSql('DROP TABLE lafleur_categorie');
        $this->addSql('DROP TABLE lafleur_clientconnu');
        $this->addSql('DROP TABLE lafleur_commande');
        $this->addSql('DROP TABLE lafleur_contenir');
        $this->addSql('DROP TABLE lafleur_produit');
        $this->addSql('DROP TABLE messages_internes');
        $this->addSql('DROP TABLE projets');
        $this->addSql('DROP TABLE projets_afpa');
        $this->addSql('DROP TABLE screens_jeux');
        $this->addSql('DROP TABLE texte_accueil');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE v2_projet');
    }
}
