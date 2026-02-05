<?php

namespace app\modules\admission\models;

use Yii;

/**
 * This is the model class for table "admission_students".
 *
 * @property int $id
 * @property int $admission_application_id
 * @property string $admission_type
 * @property string $first_name
 * @property string $surname
 * @property string $date_of_birth
 * @property int $age
 * @property string $gender
 * @property string $any_learning_difficulties
 * @property string $any_known_disabilities
 * @property string $any_known_allergies
 * @property string $medications
 * @property string $any_medication_allergies
 * @property string $previous_school_name
 * @property string $school_suburb
 * @property string $previous_class
 */
class AdmissionStudents extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admission_students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admission_application_id', 'admission_type', 'first_name', 'surname', 'date_of_birth', 'age', 'gender', 'any_learning_difficulties', 'any_known_disabilities', 'any_known_allergies', 'medications', 'any_medication_allergies', 'previous_school_name', 'school_suburb', 'previous_class'], 'required'],
            [['admission_application_id', 'age'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['any_learning_difficulties', 'any_known_disabilities', 'any_known_allergies', 'medications', 'any_medication_allergies'], 'string'],
            [['admission_type', 'first_name', 'surname', 'previous_class'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 10],
            [['previous_school_name', 'school_suburb'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admission_application_id' => 'Admission Application ID',
            'admission_type' => 'Admission Type',
            'first_name' => 'First Name',
            'surname' => 'Surname',
            'date_of_birth' => 'Date Of Birth',
            'age' => 'Age',
            'gender' => 'Gender',
            'any_learning_difficulties' => 'Any Learning Difficulties',
            'any_known_disabilities' => 'Any Known Disabilities',
            'any_known_allergies' => 'Any Known Allergies',
            'medications' => 'Medications',
            'any_medication_allergies' => 'Any Medication Allergies',
            'previous_school_name' => 'Previous School Name',
            'school_suburb' => 'School Suburb',
            'previous_class' => 'Previous Class',
        ];
    }

}
