<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230804234529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE model_component (model_id INT NOT NULL, component_id INT NOT NULL, INDEX IDX_7037C8C47975B7E7 (model_id), INDEX IDX_7037C8C4E2ABAFFF (component_id), PRIMARY KEY(model_id, component_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE model_component ADD CONSTRAINT FK_7037C8C47975B7E7 FOREIGN KEY (model_id) REFERENCES model (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE model_component ADD CONSTRAINT FK_7037C8C4E2ABAFFF FOREIGN KEY (component_id) REFERENCES component (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE model_component DROP FOREIGN KEY FK_7037C8C47975B7E7');
        $this->addSql('ALTER TABLE model_component DROP FOREIGN KEY FK_7037C8C4E2ABAFFF');
        $this->addSql('DROP TABLE model_component');
    }
}
