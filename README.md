# laravel-helpers
Helpers for laravel framework.

### 1. Helper `fof(Class::class, $class_or_id)` use for auto find the model using `id` or `Model`.
It may helper some reason. When use design pattern and you don't need it make a query every times when you pass data to your `Services` or `Repositories`.
Or when you not sure you should pass `Model` or only `id` to other class.
```
class FooController
{
    /**
     * @var FooService
     */
    protected $foo_service;
    
    /**
     * @param FooService $foo_service
     */
    public function __construct(FooService $foo_service)
    {
        $this->foo_service = $foo_service;
    }
    
    /**
     * @param int $foo_id
     */
    public function bar($foo_id)
    {
        $this->foo_service->bar($foo_id);
    }
    
    /**
     * @param FooModel $foo
     */
    public function barz(FooModel $foo)
    {
        $this->foo_service->bar($foo);
    }
}
```
```
class FooService
{
    /**
     * @param FooModel|int $foo
     */
    public function bar($foo)
    {
        $foo = fof(FooModel::class, $foo);
        
        // Do somethings.
    }
}
``` 
