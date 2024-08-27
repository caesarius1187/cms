<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Puntodeventas Model
 *
 * @property \App\Model\Table\CajasTable&\Cake\ORM\Association\HasMany $Cajas
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\HasMany $Compras
 * @property \App\Model\Table\ExtraccionesTable&\Cake\ORM\Association\HasMany $Extracciones
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\HasMany $Ventas
 *
 * @method \App\Model\Entity\Puntodeventa newEmptyEntity()
 * @method \App\Model\Entity\Puntodeventa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Puntodeventa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Puntodeventa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Puntodeventa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Puntodeventa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Puntodeventa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Puntodeventa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Puntodeventa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Puntodeventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Puntodeventa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Puntodeventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Puntodeventa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Puntodeventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Puntodeventa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Puntodeventa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Puntodeventa> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PuntodeventasTable extends Table
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

        $this->setTable('puntodeventas');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Cajas', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->hasMany('Compras', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->hasMany('Extracciones', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->hasMany('Pagos', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'puntodeventa_id',
        ]);
        $this->hasMany('Ventas', [
            'foreignKey' => 'puntodeventa_id',
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
            ->integer('numero')
            ->notEmptyString('numero');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 250)
            ->notEmptyString('descripcion');

        $validator
            ->boolean('facturacionhabilitada')
            ->allowEmptyString('facturacionhabilitada');

        return $validator;
    }
}
