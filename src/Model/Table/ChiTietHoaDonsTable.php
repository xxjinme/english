<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChiTietHoaDons Model
 *
 * @property \App\Model\Table\CthdsTable|\Cake\ORM\Association\BelongsTo $Cthds
 * @property \App\Model\Table\HdsTable|\Cake\ORM\Association\BelongsTo $Hds
 * @property \App\Model\Table\CoursesTable|\Cake\ORM\Association\BelongsTo $Courses
 *
 * @method \App\Model\Entity\ChiTietHoaDon get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChiTietHoaDon findOrCreate($search, callable $callback = null, $options = [])
 */
class ChiTietHoaDonsTable extends Table
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

        $this->setTable('chi_tiet_hoa_dons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cthds', [
            'foreignKey' => 'cthd_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hds', [
            'foreignKey' => 'hd_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
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
            ->scalar('course_price')
            ->maxLength('course_price', 255)
            ->requirePresence('course_price', 'create')
            ->notEmpty('course_price');

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
        $rules->add($rules->existsIn(['cthd_id'], 'Cthds'));
        $rules->add($rules->existsIn(['hd_id'], 'Hds'));
        $rules->add($rules->existsIn(['course_id'], 'Courses'));

        return $rules;
    }
}
