<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    //

    protected $fillable = ['key','data'];
    /**
     * 获取$conf->data的键值对
     *
     * @return mixed
     */
    public function getDataAttribute()
    {
        return json_decode($this->attributes['data']);
    }

    /**
     * 使用魔术方法
     *
     * @param $expression
     * @return mixed
     */
    public static function callByExpression($expression)
    {
        return static::__callStatic($expression,[]);
    }

    /**
     * 调用魔术方法来获取数据
     *
     * @param string $method
     * @param array $parameters
     * @return bool|null|static
     */
    public function __call($method,$parameters)
    {
        if (in_array($method,['increment','decrement'])) {
            return call_user_func_array([$this,$method],$parameters);
        }

        $query = $this->newQuery();

        if (in_array($method,get_class_methods($query))) {
            return call_user_func_array([$query,$method],$parameters);
        }

        $method = snake_case($method);

        return !!count($parameters) ? $this->updateOrCreate($method,$parameters) : $this->getConfiguration($method);
    }

    /**
     * 找到键值对应的数据
     *
     * @param $key
     * @return bool|null
     */
    public static function getConfigurationByKey($key)
    {
        try {
            $conf = static::where('key',$key)->first();
        } catch (\Exception $e) {
            return false;
        }

        return $conf ? $conf->data : null;
    }

    /**
     * 获取数据
     *
     * @param $key
     * @return bool|null
     */
    public function getConfiguration($key)
    {
        return static::getConfigurationByKey($key);
    }

    /**
     * 更新或创建信息的数据
     *
     * @param $key
     * @param $values
     * @return static
     */
    public function updateOrCreate($key,$values)
    {
        $attributes = [
            'key' => $key,
            'data' => is_object($values[0]) || is_array($values[0]) ? json_encode($values[0]) : $values[0]
        ];

        return is_null(static::where('key',$key)->first()) ? static::create($attributes) : static::where('key',$key)->update($attributes);
    }

    public static function initData()
    {
        self::link([
             'captions' => [
                 [
                 'name' => '链接名称',
                 'link' => '友情链接'
                 ]
             ]
        ]);
        self::home([
            'image'        => '主页图片',
            'link'         => '主页视频',
            'footer_about' => [
                'copyright' => '版权所有',
                'telephone' => '移动电话',
                'wechat'    => '微信公众平台账号',
                'qq'        => 'QQ号码',
                'address'   => '公司地址'
            ],
        ]);
        self::social([
            'wechat'  => '微信公众号名字',
            'weibo'   => '微博的链接',
            'qq'      => 'QQ号码'
        ]);
    }
}
