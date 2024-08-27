<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\HasMany $Compras
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\HasMany $Ventas
 *
 * @method \App\Model\Entity\Cliente newEmptyEntity()
 * @method \App\Model\Entity\Cliente newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Cliente> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Cliente findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Cliente> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Compras', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->hasMany('Pagos', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->hasMany('Ventas', [
            'foreignKey' => 'cliente_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 150)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 150)
            ->allowEmptyString('mail');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 150)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 150)
            ->allowEmptyString('celular');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 150)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('condicioniva')
            ->maxLength('condicioniva', 50)
            ->allowEmptyString('condicioniva');

        $validator
            ->scalar('DNI')
            ->maxLength('DNI', 150)
            ->allowEmptyString('DNI');

        $validator
            ->scalar('CUIT')
            ->maxLength('CUIT', 150)
            ->allowEmptyString('CUIT');

        return $validator;
    }
}
