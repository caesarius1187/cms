<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @property \App\Model\Table\RubrosTable&\Cake\ORM\Association\BelongsTo $Rubros
 * @property \App\Model\Table\DetallecomprasTable&\Cake\ORM\Association\HasMany $Detallecompras
 * @property \App\Model\Table\DetallepromotionsTable&\Cake\ORM\Association\HasMany $Detallepromotions
 * @property \App\Model\Table\DetalleventasTable&\Cake\ORM\Association\HasMany $Detalleventas
 * @property \App\Model\Table\PromotionsTable&\Cake\ORM\Association\HasMany $Promotions
 *
 * @method \App\Model\Entity\Producto newEmptyEntity()
 * @method \App\Model\Entity\Producto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Producto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Producto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Producto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Producto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Producto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Producto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Producto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Producto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Producto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Producto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Producto> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductosTable extends Table
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

        $this->setTable('productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Rubros', [
            'foreignKey' => 'rubro_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Detallecompras', [
            'foreignKey' => 'producto_id',
        ]);
        $this->hasMany('Detallepromotions', [
            'foreignKey' => 'producto_id',
        ]);
        $this->hasMany('Detalleventas', [
            'foreignKey' => 'producto_id',
        ]);
        $this->hasMany('Promotions', [
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
            ->integer('rubro_id')
            ->notEmptyString('rubro_id');

        $validator
            ->boolean('promocion')
            ->notEmptyString('promocion');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 250)
            ->allowEmptyString('nombre');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        $validator
            ->numeric('costo')
            ->allowEmptyString('costo');

        $validator
            ->numeric('ganancia')
            ->allowEmptyString('ganancia');

        $validator
            ->numeric('gananciapack')
            ->allowEmptyString('gananciapack');

        $validator
            ->numeric('ganancia1')
            ->allowEmptyString('ganancia1');

        $validator
            ->numeric('ganancia2')
            ->allowEmptyString('ganancia2');

        $validator
            ->numeric('ganancia3')
            ->allowEmptyString('ganancia3');

        $validator
            ->numeric('ganancia4')
            ->allowEmptyString('ganancia4');

        $validator
            ->numeric('preciopack')
            ->allowEmptyString('preciopack');

        $validator
            ->numeric('preciomayor1')
            ->allowEmptyString('preciomayor1');

        $validator
            ->numeric('preciomayor2')
            ->allowEmptyString('preciomayor2');

        $validator
            ->numeric('preciomayor3')
            ->allowEmptyString('preciomayor3');

        $validator
            ->numeric('preciomayor4')
            ->allowEmptyString('preciomayor4');

        $validator
            ->numeric('preciopack4')
            ->notEmptyString('preciopack4');

        $validator
            ->numeric('preciopack3')
            ->notEmptyString('preciopack3');

        $validator
            ->numeric('preciopack2')
            ->notEmptyString('preciopack2');

        $validator
            ->numeric('preciopack1')
            ->notEmptyString('preciopack1');

        $validator
            ->numeric('preciopack0')
            ->notEmptyString('preciopack0');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 50)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('codigopack')
            ->maxLength('codigopack', 50)
            ->allowEmptyString('codigopack');

        $validator
            ->integer('cantpack')
            ->allowEmptyString('cantpack');

        $validator
            ->integer('stockminimo')
            ->allowEmptyString('stockminimo');

        $validator
            ->integer('stock')
            ->allowEmptyString('stock');

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
        $rules->add($rules->existsIn(['rubro_id'], 'Rubros'), ['errorField' => 'rubro_id']);

        return $rules;
    }
}
