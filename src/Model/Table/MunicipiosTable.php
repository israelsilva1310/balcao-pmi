<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipios Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\HasMany $Empresas
 * @property \App\Model\Table\OportunidadesTable&\Cake\ORM\Association\HasMany $Oportunidades
 * @property \App\Model\Table\PessoasTable&\Cake\ORM\Association\HasMany $Pessoas
 *
 * @method \App\Model\Entity\Municipio newEmptyEntity()
 * @method \App\Model\Entity\Municipio newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Municipio> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Municipio get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Municipio findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Municipio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Municipio> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Municipio|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Municipio saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Municipio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Municipio>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Municipio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Municipio> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Municipio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Municipio>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Municipio>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Municipio> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MunicipiosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('municipios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Empresas', [
            'foreignKey' => 'municipio_id',
        ]);
        $this->hasMany('Oportunidades', [
            'foreignKey' => 'municipio_id',
        ]);
        $this->hasMany('Pessoas', [
            'foreignKey' => 'municipio_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->maxLength('nome', 120)
            ->allowEmptyString('nome');

        $validator
            ->integer('uf')
            ->allowEmptyString('uf');

        $validator
            ->integer('ibge')
            ->allowEmptyString('ibge');

        return $validator;
    }
}
