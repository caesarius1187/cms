<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rubros Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\HasMany $Productos
 *
 * @method \App\Model\Entity\Rubro newEmptyEntity()
 * @method \App\Model\Entity\Rubro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Rubro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rubro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Rubro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Rubro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Rubro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rubro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Rubro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Rubro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rubro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rubro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rubro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rubro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rubro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rubro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rubro> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RubrosTable extends Table
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

        $this->setTable('rubros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Productos', [
            'foreignKey' => 'rubro_id',
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
            ->maxLength('nombre', 250)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 250)
            ->allowEmptyString('descripcion');

        return $validator;
    }
}
