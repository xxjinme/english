<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HoaDons Model
 *
 * @property \App\Model\Table\HdsTable|\Cake\ORM\Association\BelongsTo $Hds
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\HoaDon get($primaryKey, $options = [])
 * @method \App\Model\Entity\HoaDon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HoaDon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HoaDon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HoaDon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HoaDon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HoaDon findOrCreate($search, callable $callback = null, $options = [])
 */
class HoaDonsTable extends Table
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

        $this->setTable('hoa_dons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Hds', [
            'foreignKey' => 'hd_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->scalar('hd_tong')
            ->maxLength('hd_tong', 255)
            ->requirePresence('hd_tong', 'create')
            ->notEmpty('hd_tong');

        $validator
            ->dateTime('hd_ngaylap')
            ->requirePresence('hd_ngaylap', 'create')
            ->notEmpty('hd_ngaylap');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['hd_id'], 'Hds'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
