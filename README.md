# laravel-helpers
Helpers for laravel framework.

### 1. `fof` use for auto find the model using `id` or `Model`.
It may helper some reason. When use design pattern and you don't need it make a query every times when you pass data to your `Services` or `Repositories`.
Or when you not sure you should pass `Model` or only `id` to other class.
```
use App\FooModel;

class Foo
{
    protected $foo_service;
    
    public function __construct(FooService $foo_service)
    {
        $this->foo_service = $foo_service;
    }
    
    public function bar($foo_id)
    {
        $this->foo_service->bar(FooModel::class, $foo_id);
    }
    
    public function barz(FooModel $foo)
    {
        $this->foo_service->bar(FooModel::class, $foo);
    }
}

class FooService
{
    /**
     * @param FooModel|int $foo
     * @return mixed
     */
    public function bar($foo)
    {
        $foo = fof(FooModel::class, $foo);
        
        // Do somethings.
    }
}
``` 
