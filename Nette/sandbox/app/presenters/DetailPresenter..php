<?php

/**
 * Cars presenter.
 */
class DetailPresenter extends BasePresenter {

    private $detailRepository;

    protected function startup() {
        parent:: startup();
    }

    public function inject(Todo\DetailRepository $detailRepository) {
        $this->detailRepository = $detailRepository;
    }

    public function actionDefault() {
        
    }
    
    public function actionShow($id) {
        $list = $this->detailRepository->getData($id);
        if ($list->getRowCount() == 1) {
            foreach ($list as $item) {
                $pole['about'] = $item->about;
                $pole['name'] = $item->name;
                $pole['price'] = $item->price;
                $pole['phone'] = $item->phone;
                $pole['create'] = $item->create_date;
                $pole['main_image'] = $item->main_image;
                $pole['year'] = $item->year;
                $pole['capacity'] = $item->capacity;
                $pole['kilometres'] = $item->kilometres;
                $pole['power'] = $item->power;

                $poms = $this->detailRepository->getBrandName($item->brand);
                foreach ($poms as $pom) {
                    $pole['brand'] = $pom['name'];
                }
                $poms = $this->detailRepository->getModelName($item->model);
                foreach ($poms as $pom) {
                    $pole['model'] = $pom['model'];
                }
                $poms = $this->detailRepository->getStringName($item->region);
                foreach ($poms as $pom) {
                    $pole['region'] = $pom['name'];
                }
                $poms = $this->detailRepository->getStringName($item->gas);
                foreach ($poms as $pom) {
                    $pole['gas'] = $pom['name'];
                }
                $poms = $this->detailRepository->getStringName($item->gear);
                foreach ($poms as $pom) {
                    $pole['gear'] = $pom['name'];
                }
            }

            $images = $this->detailRepository->getImagesSrc($id);
            foreach ($images as $item) {
                $image[] = $item->src;
            }

            $data = $this->detailRepository->getSecData($id);
            $data2 = $this->detailRepository->getOtherData($id);


            $this->template->image = $image;
            $this->template->pole = $pole;
            $this->template->data = $data;
            $this->template->data2 = $data2;
            $this->setView('default');
        } else {
            $this->setView('none');
        }
    }

    public function renderDefault() {
        
    }

    public function renderShow() {
        
    }

}
