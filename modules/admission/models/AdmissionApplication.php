<?php

namespace app\modules\admission\models;

use Yii;

/**
 * This is the model class for table "admission_application".
 *
 * @property int $id
 * @property string $father_first_name
 * @property string $father_surname
 * @property int $father_mobile
 * @property string $father_email
 * @property string $mother_first_name
 * @property string $mother_surname
 * @property int $mother_mobile
 * @property string $mother_email
 * @property string $emergency_contact_name
 * @property int $emergency_contact_number
 * @property string $relationship_to_student
 * @property string $policies
 */
class AdmissionApplication extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admission_application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['father_first_name', 'father_surname', 'father_mobile', 'father_email', 'mother_first_name', 'mother_surname', 'mother_mobile', 'mother_email', 'emergency_contact_name', 'emergency_contact_number', 'relationship_to_student', 'policies'], 'required'],
            [['father_mobile', 'mother_mobile', 'emergency_contact_number'], 'integer'],
            [['policies'], 'string'],
            [['father_first_name', 'father_surname', 'father_email', 'mother_first_name', 'mother_surname', 'mother_email', 'emergency_contact_name', 'relationship_to_student'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'father_first_name' => 'Father First Name',
            'father_surname' => 'Father Surname',
            'father_mobile' => 'Father Mobile',
            'father_email' => 'Father Email',
            'mother_first_name' => 'Mother First Name',
            'mother_surname' => 'Mother Surname',
            'mother_mobile' => 'Mother Mobile',
            'mother_email' => 'Mother Email',
            'emergency_contact_name' => 'Emergency Contact Name',
            'emergency_contact_number' => 'Emergency Contact Number',
            'relationship_to_student' => 'Relationship To Student',
            'policies' => 'Policies',
        ];
    }

}
