<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appoint Model
 *
 * @method \App\Model\Entity\Appoint newEmptyEntity()
 * @method \App\Model\Entity\Appoint newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Appoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Appoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Appoint findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Appoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Appoint[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Appoint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AppointTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('appoint');
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
            ->scalar('id')
            ->maxLength('id', 20)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('product')
            ->maxLength('product', 255)
            ->requirePresence('product', 'create')
            ->notEmptyString('product');

        $validator
            ->scalar('consult')
            ->maxLength('consult', 11)
            ->requirePresence('consult', 'create')
            ->notEmptyString('consult');

        $validator
            ->scalar('orderstr')
            ->maxLength('orderstr', 240)
            ->requirePresence('orderstr', 'create')
            ->notEmptyString('orderstr');

        $validator
            ->dateTime('time')
            ->notEmptyDateTime('time');

        return $validator;
    }
}
