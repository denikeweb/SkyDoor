<?php

/**
 * This is the model class for table "links".
 *
 * The followings are the available columns in table 'links':
 * @property integer $id
 * @property string $surl
 * @property string $url
 */
class Links extends CActiveRecord
{
	public $shortURL;
	public $error;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'links';
	}
	
	public function setURL()
	{
		$surl = $_GET['url'];
		if (preg_match("|^[A-Za-z0-9_-]+$|",$surl)) {
			$this->shortURL = $surl;
			$this->toURL();
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('surl, url', 'required'),
			array('surl', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, surl, url', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'surl' => 'Surl',
			'url' => 'Url',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('surl',$this->surl,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Links the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	private function toURL(){
		$short = $this->shortURL;
		if (strlen($short) == 0) {
			$this->error = "";
			return false;
		}
				
		$link = mysql_connect("localhost", "root", "");
		mysql_select_db("skydoor", $link);
		$query = mysql_query("SELECT `url` FROM `links` WHERE `surl`='$short'");
		if (mysql_num_rows($query) == 1) {
			$result = mysql_fetch_array($query);
			$link = $result['url'];
			header('Location: '.$link);
		} else {
			$this->error = "Страница не найдена";
			return false;
		}
	}
}
