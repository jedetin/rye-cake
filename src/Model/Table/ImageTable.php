<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Image Model
 *
 * @method \App\Model\Entity\Image newEmptyEntity()
 * @method \App\Model\Entity\Image newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImageTable extends Table
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

        $this->setTable('image');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            //->notEmptyFile('image')
            // ->add('image', 'fileBelowMaxHeight', [
            //     'rule' => ['isBelowMaxHeight', 1080],
            //     'message' => 'This image should not be higher than 1080px',
            //     'provider' => 'upload'
            // ])
            // ->add('image', 'fileBelowMaxWidth', [
            //     'rule' => ['isBelowMaxWidth', 1080],
            //     'message' => 'This image should not be wider than 1080px',
            //     'provider' => 'upload'
            // ])
            ->add('image', [
                'mimeType' => [
                    'rule' => [ 'mimeType', [ 'image/jpg', 'image/png', 'image/jpeg' ] ],
                    'message' => 'Invalid Format: Please upload only jpg and png.',
                ],
                'fileSize' => [
                    'rule' => [ 'fileSize', '<=', '1MB' ],
                    'message' => 'Invalid Size: Image file size must be less than 1MB.',
                ],
            ]);

        $validator
            ->integer('height')
            ->requirePresence('height', 'create')
            ->notEmptyString('height');

        $validator
            ->integer('width')
            ->requirePresence('width', 'create')
            ->notEmptyString('width');

        $validator
            ->scalar('lefts')
            ->maxLength('lefts', 255)
            ->requirePresence('lefts', 'create')
            ->notEmptyString('lefts');

        $validator
            ->integer('top')
            ->requirePresence('top', 'create')
            ->notEmptyString('top');

        return $validator;
    }
}
