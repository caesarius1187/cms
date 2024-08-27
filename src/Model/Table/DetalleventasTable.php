<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detalleventas Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\BelongsTo $Ventas
 *
 * @method \App\Model\Entity\Detalleventa newEmptyEntity()
 * @method \App\Model\Entity\Detalleventa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detalleventa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detalleventa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detalleventa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detalleventa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detalleventa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detalleventa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detalleventa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detalleventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalleventa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalleventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalleventa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalleventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalleventa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalleventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalleventa> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DetalleventasTable extends Table
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

        $this->setTable('detalleventas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
        ]);
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
            ->integer('producto_id')
            ->allowEmptyString('producto_id');

        $validator
            ->integer('venta_id')
            ->allowEmptyString('venta_id');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        $validator
            ->numeric('ganancia')
            ->allowEmptyString('ganancia');

        $validator
            ->scalar('tipoprecio')
            ->maxLength('tipoprecio', 50)
            ->allowEmptyString('tipoprecio');

        $validator
            ->numeric('costo')
            ->allowEmptyString('costo');

        $validator
            ->integer('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->numeric('porcentajedescuento')
            ->allowEmptyString('porcentajedescuento');

        $validator
            ->numeric('importedescuento')
            ->allowEmptyString('importedescuento');

        $validator
            ->numeric('subtotal')
            ->allowEmptyString('subtotal');

        $validator
            ->scalar('codigoalicuota')
            ->maxLength('codigoalicuota', 50)
            ->allowEmptyString('codigoalicuota');

        $validator
            ->numeric('alicuota')
            ->allowEmptyString('alicuota');

        $validator
            ->numeric('importeiva')
            ->allowEmptyString('importeiva');

        $validator
            ->numeric('subtotalconiva')
            ->allowEmptyString('subtotalconiva');

        $validator
            ->integer('fcantidad')
            ->allowEmptyString('fcantidad');

        $validator
            ->numeric('fporcentajedescuento')
            ->allowEmptyString('fporcentajedescuento');

        $validator
            ->numeric('fprecio')
            ->allowEmptyString('fprecio');

        $validator
            ->numeric('fimportedescuento')
            ->allowEmptyString('fimportedescuento');

        $validator
            ->numeric('fsubtotal')
            ->allowEmptyString('fsubtotal');

        $validator
            ->scalar('fcodigoalicuota')
            ->maxLength('fcodigoalicuota', 50)
            ->allowEmptyString('fcodigoalicuota');

        $validator
            ->numeric('falicuota')
            ->allowEmptyString('falicuota');

        $validator
            ->numeric('fimporteiva')
            ->allowEmptyString('fimporteiva');

        $validator
            ->numeric('fsubtotalconiva')
            ->allowEmptyString('fsubtotalconiva');

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
        $rules->add($rules->existsIn(['venta_id'], 'Ventas'), ['errorField' => 'venta_id']);

        return $rules;
    }
}
