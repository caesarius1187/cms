<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Camposopcionales Model
 *
 * @method \App\Model\Entity\Camposopcionale newEmptyEntity()
 * @method \App\Model\Entity\Camposopcionale newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Camposopcionale> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Camposopcionale get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Camposopcionale findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Camposopcionale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Camposopcionale> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Camposopcionale|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Camposopcionale saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Camposopcionale>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camposopcionale>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camposopcionale>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camposopcionale> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camposopcionale>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camposopcionale>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camposopcionale>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camposopcionale> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CamposopcionalesTable extends Table
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

        $this->setTable('camposopcionales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('idafip')
            ->allowEmptyString('idafip');

        $validator
            ->numeric('valor')
            ->allowEmptyString('valor');

        return $validator;
    }
}
