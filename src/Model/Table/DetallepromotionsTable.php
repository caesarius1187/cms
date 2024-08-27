<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detallepromotions Model
 *
 * @property \App\Model\Table\PromotionsTable&\Cake\ORM\Association\BelongsTo $Promotions
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\Detallepromotion newEmptyEntity()
 * @method \App\Model\Entity\Detallepromotion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detallepromotion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detallepromotion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detallepromotion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detallepromotion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detallepromotion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detallepromotion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detallepromotion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detallepromotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallepromotion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallepromotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallepromotion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallepromotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallepromotion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallepromotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallepromotion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetallepromotionsTable extends Table
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

        $this->setTable('detallepromotions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Promotions', [
            'foreignKey' => 'promotion_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
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
            ->integer('promotion_id')
            ->notEmptyString('promotion_id');

        $validator
            ->integer('producto_id')
            ->notEmptyString('producto_id');

        $validator
            ->numeric('ganancia')
            ->notEmptyString('ganancia');

        $validator
            ->numeric('precio')
            ->notEmptyString('precio');

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
        $rules->add($rules->existsIn(['promotion_id'], 'Promotions'), ['errorField' => 'promotion_id']);
        $rules->add($rules->existsIn(['producto_id'], 'Productos'), ['errorField' => 'producto_id']);

        return $rules;
    }
}
