<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detallecompras Model
 *
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\BelongsTo $Compras
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\Detallecompra newEmptyEntity()
 * @method \App\Model\Entity\Detallecompra newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detallecompra> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detallecompra get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detallecompra findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detallecompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detallecompra> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detallecompra|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detallecompra saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detallecompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallecompra>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallecompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallecompra> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallecompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallecompra>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detallecompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detallecompra> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetallecomprasTable extends Table
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

        $this->setTable('detallecompras');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Compras', [
            'foreignKey' => 'compra_id',
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
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
            ->integer('compra_id')
            ->allowEmptyString('compra_id');

        $validator
            ->integer('producto_id')
            ->allowEmptyString('producto_id');

        $validator
            ->integer('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        $validator
            ->numeric('porcentajeganancia')
            ->allowEmptyString('porcentajeganancia');

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
        $rules->add($rules->existsIn(['compra_id'], 'Compras'), ['errorField' => 'compra_id']);
        $rules->add($rules->existsIn(['producto_id'], 'Productos'), ['errorField' => 'producto_id']);

        return $rules;
    }
}
