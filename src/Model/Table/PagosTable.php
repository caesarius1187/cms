<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagos Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\PuntodeventasTable&\Cake\ORM\Association\BelongsTo $Puntodeventas
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\BelongsTo $Compras
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\BelongsTo $Ventas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Pago newEmptyEntity()
 * @method \App\Model\Entity\Pago newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pago> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pago get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pago findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pago> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pago|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pago saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pago>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pago> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pago>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pago> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PagosTable extends Table
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

        $this->setTable('pagos');
        $this->setDisplayField('tipo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Puntodeventas', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->belongsTo('Compras', [
            'foreignKey' => 'compra_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ventas', [
            'foreignKey' => 'venta_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        $validator
            ->integer('puntodeventa_id')
            ->allowEmptyString('puntodeventa_id');

        $validator
            ->integer('compra_id')
            ->notEmptyString('compra_id');

        $validator
            ->integer('venta_id')
            ->notEmptyString('venta_id');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->uuid('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->dateTime('fecha')
            ->allowEmptyDateTime('fecha');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 500)
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('metodo')
            ->notEmptyString('metodo');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['puntodeventa_id'], 'Puntodeventas'), ['errorField' => 'puntodeventa_id']);
        $rules->add($rules->existsIn(['compra_id'], 'Compras'), ['errorField' => 'compra_id']);
        $rules->add($rules->existsIn(['venta_id'], 'Ventas'), ['errorField' => 'venta_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
