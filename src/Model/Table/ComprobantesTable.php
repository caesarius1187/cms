<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comprobantes Model
 *
 * @property \App\Model\Table\ComprasTable&\Cake\ORM\Association\HasMany $Compras
 * @property \App\Model\Table\VentasTable&\Cake\ORM\Association\HasMany $Ventas
 *
 * @method \App\Model\Entity\Comprobante newEmptyEntity()
 * @method \App\Model\Entity\Comprobante newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Comprobante> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comprobante get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Comprobante findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Comprobante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Comprobante> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comprobante|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Comprobante saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Comprobante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comprobante>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comprobante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comprobante> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comprobante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comprobante>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comprobante>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comprobante> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ComprobantesTable extends Table
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

        $this->setTable('comprobantes');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Compras', [
            'foreignKey' => 'comprobante_id',
        ]);
        $this->hasMany('Ventas', [
            'foreignKey' => 'comprobante_id',
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
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 50)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->scalar('tipodebitoasociado')
            ->allowEmptyString('tipodebitoasociado');

        $validator
            ->scalar('tipocreditoasociado')
            ->allowEmptyString('tipocreditoasociado');

        $validator
            ->scalar('abreviacion')
            ->maxLength('abreviacion', 50)
            ->allowEmptyString('abreviacion');

        $validator
            ->scalar('abreviacion2')
            ->maxLength('abreviacion2', 50)
            ->notEmptyString('abreviacion2');

        return $validator;
    }
}
