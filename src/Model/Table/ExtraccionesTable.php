<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Extracciones Model
 *
 * @property \App\Model\Table\PuntodeventasTable&\Cake\ORM\Association\BelongsTo $Puntodeventas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Extraccione newEmptyEntity()
 * @method \App\Model\Entity\Extraccione newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Extraccione> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Extraccione get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Extraccione findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Extraccione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Extraccione> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Extraccione|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Extraccione saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Extraccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Extraccione>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Extraccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Extraccione> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Extraccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Extraccione>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Extraccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Extraccione> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExtraccionesTable extends Table
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

        $this->setTable('extracciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Puntodeventas', [
            'foreignKey' => 'puntodeventa_id',
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
            ->scalar('descripcion')
            ->maxLength('descripcion', 250)
            ->allowEmptyString('descripcion');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

        $validator
            ->numeric('saldo')
            ->allowEmptyString('saldo');

        $validator
            ->dateTime('fecha')
            ->allowEmptyDateTime('fecha');

        $validator
            ->integer('puntodeventa_id')
            ->allowEmptyString('puntodeventa_id');

        $validator
            ->uuid('user_id')
            ->allowEmptyString('user_id');

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
        $rules->add($rules->existsIn(['puntodeventa_id'], 'Puntodeventas'), ['errorField' => 'puntodeventa_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
