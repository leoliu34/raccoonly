<?php
namespace App\Model\Table;

use App\Model\Entity\Raccoon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Raccoons Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Cities
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 */
class RaccoonsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('raccoons');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Cities', [
            'foreignKey' => 'raccoon_id',
            'targetForeignKey' => 'city_id',
            'joinTable' => 'cities_raccoons'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'raccoon_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'raccoons_tags'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('gender');

        $validator
            ->boolean('has_cubs')
            ->allowEmpty('has_cubs');

        return $validator;
    }
}
