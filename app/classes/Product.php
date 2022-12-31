<?php


namespace APP\classes;


class Product
{
    public $products=[];
    public function addProduct()
    {
        $this->products = [
            0=>[
                'id'=>1,
                'name'=>'white shirt',
                'price'=>2500,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/11.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'white pant',
                'price'=>3000,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/10.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'black shirt',
                'price'=>1000,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/12.jpg'
            ],
            3=>[
                'id'=>4,
                'name'=>'Red sharee',
                'price'=>5000,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/14.jpg'
            ],
            4=>[
                'id'=>5,
                'name'=>'white shoos',
                'price'=>1500,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/13.jpg'
            ],
            5=>[
                'id'=>6,
                'name'=>'Female red shoos',
                'price'=>25000,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, pariatur praesentium! Eveniet harum officia ut? Ab accusamus aspernatur debitis deserunt dignissimos, dolorem enim eos, illum ipsum, maiores nostrum perferendis tempore?',
                'image'=>'assets/img/17.jpg'
            ],
        ];
        return $this->products;
    }
}