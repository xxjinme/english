<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Http\Session;
use Cake\Core\Configure;

/**
 * Carts Model
 *
 * @method \App\Model\Entity\Cart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cart|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cart findOrCreate($search, callable $callback = null, $options = [])
 */
class CartsTable extends Table
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

        $this->setTable('carts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function addKhoaHoc($khoaHocId) {
        $allKhoaHocs = $this->readKhoaHoc();
        if (null!=$allKhoaHocs) {
            if (array_key_exists($khoaHocId, $allKhoaHocs)) {
                $allKhoaHocs[$khoaHocId]++;
            } else {
                $allKhoaHocs[$khoaHocId] = 1;
            }
        } else {
            //$allProducts[2018] = 999;
            $allKhoaHocs[$khoaHocId] = 1;
            //$this->saveProduct($allProducts);
        }
        $this->saveProduct($allKhoaHocs);
        //$this->Session->destroy();
    }

    /*
     * get total count of products
     */
    public function getCount() {
        $allKhoaHocs = $this->readKhoaHoc();

        if ($allKhoaHocs && count($allKhoaHocs)<1) {
            return 0;
        }

        $count = 0;
        if(is_array($allKhoaHocs)){
            foreach ($allKhoaHocs as $khoaHoc) {
                $count=$count+$khoaHoc;
            }

            return $count; 
        }
    }

    /*
     * save data to session
     */
    public function saveKhoaHoc($data) {
        $session = new Session();
        return $session->write('Cart',$data);
    }

    /*
     * read cart data from session
     */
    public function readKhoaHoc() {
        $session = new Session();
        return $session->read('Cart');
    }
}
