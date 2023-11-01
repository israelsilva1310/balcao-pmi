<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\MunicipiosTable&\Cake\ORM\Association\BelongsTo $Municipios
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\HasMany $Vagas
 *
 * @method \App\Model\Entity\Empresa newEmptyEntity()
 * @method \App\Model\Entity\Empresa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Empresa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Municipios', [
            'foreignKey' => 'municipio_id',
        ]);
        $this->hasMany('Vagas', [
            'foreignKey' => 'empresa_id',
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
            ->integer('municipio_id')
            ->allowEmptyString('municipio_id');

        $validator
            ->scalar('razaosocial')
            ->maxLength('razaosocial', 255)
            ->allowEmptyString('razaosocial');

        $validator
            ->scalar('nome_fantasia')
            ->maxLength('nome_fantasia', 255)
            ->allowEmptyString('nome_fantasia');

        $validator
            ->scalar('missao')
            ->allowEmptyString('missao');

        $validator
            ->scalar('visao')
            ->allowEmptyString('visao');

        $validator
            ->scalar('valores')
            ->allowEmptyString('valores');

        $validator
            ->boolean('is_pj')
            ->allowEmptyString('is_pj');

        $validator
            ->scalar('cpfcnpj')
            ->maxLength('cpfcnpj', 21)
            ->allowEmptyString('cpfcnpj');

        $validator
            ->scalar('ie')
            ->maxLength('ie', 30)
            ->allowEmptyString('ie');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('municipio_id', 'Municipios'), ['errorField' => 'municipio_id']);

        return $rules;
    }
}
