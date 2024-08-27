<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alicuotas Model
 *
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\BelongsTo $Ventas
 *
 * @method \App\Model\Entity\Alicuota newEmptyEntity()
 * @method \App\Model\Entity\Alicuota newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Alicuota> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alicuota get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Alicuota findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Alicuota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Alicuota> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alicuota|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Alicuota saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Alicuota>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alicuota>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alicuota>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alicuota> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alicuota>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alicuota>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Alicuota>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Alicuota> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AlicuotasTable extends Table
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

        $this->setTable('alicuotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ventas', [
            'foreignKey' => 'venta_id',
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
            ->integer('venta_id')
            ->allowEmptyString('venta_id');

        $validator
            ->integer('idafip')
            ->allowEmptyString('idafip');

        $validator
            ->numeric('baseimponible')
            ->allowEmptyString('baseimponible');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

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
        $rules->add($rules->existsIn(['venta_id'], 'Ventas'), ['errorField' => 'venta_id']);

        return $rules;
    }
}
