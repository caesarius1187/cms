<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compras Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PuntodeventasTable&\Cake\ORM\Association\BelongsTo $Puntodeventas
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\ComprobantesTable&\Cake\ORM\Association\BelongsTo $Comprobantes
 * @property \App\Model\Table\DetallecomprasTable&\Cake\ORM\Association\HasMany $Detallecompras
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 *
 * @method \App\Model\Entity\Compra newEmptyEntity()
 * @method \App\Model\Entity\Compra newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Compra> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compra get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Compra findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Compra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Compra> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compra|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Compra saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Compra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Compra>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Compra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Compra> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Compra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Compra>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Compra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Compra> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComprasTable extends Table
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

        $this->setTable('compras');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Puntodeventas', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Comprobantes', [
            'foreignKey' => 'comprobante_id',
        ]);
        $this->hasMany('Detallecompras', [
            'foreignKey' => 'compra_id',
        ]);
        $this->hasMany('Pagos', [
            'foreignKey' => 'compra_id',
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
            ->uuid('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('puntodeventa_id')
            ->allowEmptyString('puntodeventa_id');

        $validator
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        $validator
            ->integer('comprobante_id')
            ->allowEmptyString('comprobante_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 50)
            ->notEmptyString('numero');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->numeric('neto')
            ->requirePresence('neto', 'create')
            ->notEmptyString('neto');

        $validator
            ->numeric('iva')
            ->allowEmptyString('iva');

        $validator
            ->numeric('total')
            ->allowEmptyString('total');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['puntodeventa_id'], 'Puntodeventas'), ['errorField' => 'puntodeventa_id']);
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['comprobante_id'], 'Comprobantes'), ['errorField' => 'comprobante_id']);

        return $rules;
    }
}
