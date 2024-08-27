<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ventas Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\ComprobantesTable&\Cake\ORM\Association\BelongsTo $Comprobantes
 * @property \App\Model\Table\PuntodeventasTable&\Cake\ORM\Association\BelongsTo $Puntodeventas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AlicuotasTable&\Cake\ORM\Association\HasMany $Alicuotas
 * @property \App\Model\Table\DetalleventasTable&\Cake\ORM\Association\HasMany $Detalleventas
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 * @property \App\Model\Table\TributosTable&\Cake\ORM\Association\HasMany $Tributos
 *
 * @method \App\Model\Entity\Venta newEmptyEntity()
 * @method \App\Model\Entity\Venta newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Venta> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venta get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Venta findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Venta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Venta> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venta|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Venta saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Venta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Venta>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Venta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Venta> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Venta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Venta>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Venta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Venta> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VentasTable extends Table
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

        $this->setTable('ventas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Comprobantes', [
            'foreignKey' => 'comprobante_id',
        ]);
        $this->belongsTo('Puntodeventas', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Alicuotas', [
            'foreignKey' => 'venta_id',
        ]);
        $this->hasMany('Detalleventas', [
            'foreignKey' => 'venta_id',
        ]);
        $this->hasMany('Pagos', [
            'foreignKey' => 'venta_id',
        ]);
        $this->hasMany('Tributos', [
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
            ->boolean('presupuesto')
            ->allowEmptyString('presupuesto');

        $validator
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        $validator
            ->scalar('fnombre')
            ->maxLength('fnombre', 250)
            ->allowEmptyString('fnombre');

        $validator
            ->scalar('fcuit')
            ->maxLength('fcuit', 50)
            ->allowEmptyString('fcuit');

        $validator
            ->scalar('fdomicilio')
            ->maxLength('fdomicilio', 250)
            ->allowEmptyString('fdomicilio');

        $validator
            ->integer('comprobante_id')
            ->allowEmptyString('comprobante_id');

        $validator
            ->integer('puntodeventa_id')
            ->allowEmptyString('puntodeventa_id');

        $validator
            ->uuid('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 50)
            ->allowEmptyString('numero');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->numeric('neto')
            ->allowEmptyString('neto');

        $validator
            ->numeric('porcentajedescuento')
            ->allowEmptyString('porcentajedescuento');

        $validator
            ->numeric('importedescuento')
            ->allowEmptyString('importedescuento');

        $validator
            ->numeric('iva')
            ->allowEmptyString('iva');

        $validator
            ->numeric('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('comprobantedesde')
            ->maxLength('comprobantedesde', 50)
            ->allowEmptyString('comprobantedesde');

        $validator
            ->scalar('comprobantehasta')
            ->maxLength('comprobantehasta', 50)
            ->allowEmptyString('comprobantehasta');

        $validator
            ->scalar('concepto')
            ->maxLength('concepto', 50)
            ->allowEmptyString('concepto');

        $validator
            ->date('servdesde')
            ->allowEmptyDate('servdesde');

        $validator
            ->date('servhasta')
            ->allowEmptyDate('servhasta');

        $validator
            ->date('vtopago')
            ->allowEmptyDate('vtopago');

        $validator
            ->scalar('condicioniva')
            ->maxLength('condicioniva', 50)
            ->allowEmptyString('condicioniva');

        $validator
            ->numeric('imptributos')
            ->allowEmptyString('imptributos');

        $validator
            ->numeric('importeivaexento')
            ->allowEmptyString('importeivaexento');

        $validator
            ->numeric('importenetogravado')
            ->allowEmptyString('importenetogravado');

        $validator
            ->numeric('fneto')
            ->allowEmptyString('fneto');

        $validator
            ->numeric('fporcentajedescuento')
            ->allowEmptyString('fporcentajedescuento');

        $validator
            ->numeric('fimportedescuento')
            ->allowEmptyString('fimportedescuento');

        $validator
            ->numeric('fiva')
            ->allowEmptyString('fiva');

        $validator
            ->numeric('fimptributos')
            ->allowEmptyString('fimptributos');

        $validator
            ->numeric('fimportenetoivaexento')
            ->allowEmptyString('fimportenetoivaexento');

        $validator
            ->numeric('fimportenetonogravado')
            ->allowEmptyString('fimportenetonogravado');

        $validator
            ->numeric('ftotal')
            ->allowEmptyString('ftotal');

        $validator
            ->boolean('cobrado')
            ->notEmptyString('cobrado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    // public function buildRules(RulesChecker $rules): RulesChecker
    // {
    //     $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);
    //     $rules->add($rules->existsIn(['comprobante_id'], 'Comprobantes'), ['errorField' => 'comprobante_id']);
    //     $rules->add($rules->existsIn(['puntodeventa_id'], 'Puntodeventas'), ['errorField' => 'puntodeventa_id']);
    //     $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

    //     return $rules;
    // }
}
