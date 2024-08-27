<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Promotions Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\DetallepromotionsTable&\Cake\ORM\Association\HasMany $Detallepromotions
 *
 * @method \App\Model\Entity\Promotion newEmptyEntity()
 * @method \App\Model\Entity\Promotion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Promotion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promotion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Promotion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Promotion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Promotion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promotion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Promotion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Promotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promotion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promotion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promotion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promotion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promotion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PromotionsTable extends Table
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

        $this->setTable('promotions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Detallepromotions', [
            'foreignKey' => 'promotion_id',
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
            ->integer('producto_id')
            ->notEmptyString('producto_id');

        $validator
            ->integer('productopromocion_id')
            ->notEmptyString('productopromocion_id');

        $validator
            ->numeric('costo')
            ->allowEmptyString('costo');

        $validator
            ->numeric('ganancia')
            ->allowEmptyString('ganancia');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        $validator
            ->integer('cantidad')
            ->allowEmptyString('cantidad');

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
        $rules->add($rules->existsIn(['producto_id'], 'Productos'), ['errorField' => 'producto_id']);

        return $rules;
    }
}
