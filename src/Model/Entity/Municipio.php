<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipio Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $uf
 * @property int|null $ibge
 *
 * @property \App\Model\Entity\Empresa[] $empresas
 * @property \App\Model\Entity\Oportunidade[] $oportunidades
 * @property \App\Model\Entity\Pessoa[] $pessoas
 */
class Municipio extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome' => true,
        'uf' => true,
        'ibge' => true,
        'empresas' => true,
        'oportunidades' => true,
        'pessoas' => true,
    ];
}
