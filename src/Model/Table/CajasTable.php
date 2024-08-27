<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cajas Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PuntodeventasTable&\Cake\ORM\Association\BelongsTo $Puntodeventas
 *
 * @method \App\Model\Entity\Caja newEmptyEntity()
 * @method \App\Model\Entity\Caja newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Caja> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caja get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Caja findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Caja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Caja> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caja|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Caja saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Caja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Caja>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Caja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Caja> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Caja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Caja>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Caja>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Caja> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CajasTable extends Table
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

        $this->setTable('cajas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Puntodeventas', [
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
            ->uuid('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('puntodeventa_id')
            ->allowEmptyString('puntodeventa_id');

        $validator
            ->dateTime('apertura')
            ->allowEmptyDateTime('apertura');

        $validator
            ->numeric('importeapertura')
            ->allowEmptyString('importeapertura');

        $validator
            ->dateTime('cierre')
            ->allowEmptyDateTime('cierre');

        $validator
            ->numeric('importecierre')
            ->allowEmptyString('importecierre');

        $validator
            ->numeric('diferencia')
            ->allowEmptyString('diferencia');

        $validator
            ->scalar('descripcioncierre')
            ->maxLength('descripcioncierre', 500)
            ->allowEmptyString('descripcioncierre');

        $validator
            ->scalar('descripcionapertura')
            ->maxLength('descripcionapertura', 500)
            ->allowEmptyString('descripcionapertura');

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

        return $rules;
    }
}
