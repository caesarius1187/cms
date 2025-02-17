<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Files Model
 *
 * @method \App\Model\Entity\File newEmptyEntity()
 * @method \App\Model\Entity\File newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\File> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\File get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\File findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\File patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\File> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\File|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\File saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\File>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\File>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\File>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\File> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\File>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\File>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\File>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\File> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FilesTable extends Table
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

        $this->setTable('files');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->requirePresence('path', 'create')
            ->notEmptyString('path');

        $validator
            ->boolean('procesado')
            ->notEmptyString('procesado');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }
}
