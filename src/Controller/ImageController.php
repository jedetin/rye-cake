<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\NotFoundException;

// use Intervention\Image\ImageManager;

/**
 * Image Controller
 *
 * @property \App\Model\Table\ImageTable $Image
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key');

        if (!empty($key)) {
            $string = str_replace(' ', '', $key);
            $refstr = explode("x", $string);
            // $query = $this->Image->find('all')->where(['And' => ['Image.height LIKE'=>'%'.$key.'%','Image.width LIKE'=>'%'.$key.'%']]);
            //exit($query);
            $query = $this->Image->findAllByWidthAndHeight($refstr[1], $refstr[0]);
        // $query = $this->Image->findAllByHeightAndWidth($refstr[0],$refstr[1]);
            //exit($query);
        } else {
            $query = $this->Image;
        }

        if (empty($query)) {
            throw new NotFoundException("No matching image with dimensions found");
        }
        $image = $this->paginate($query);

        $this->set(compact('image'));
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Image->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('image'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Image->newEmptyEntity();
        if ($this->request->is('post')) {
            $image = $this->Image->patchEntity($image, $this->request->getData());

            if (!$image->getErrors) {
                # code...

                $attachment = $this->request->getData('image');
                $img_h = $this->request->getData('height');
                $img_w = $this->request->getData('width');
                $img_l = $this->request->getData('lefts');
                $img_t = $this->request->getData('top');

                // $img = Image::make($attachment);
                // $img->crop($img_w, $img_h, $img_l, $img_t);

                // $src = imagecreatefrompng($attachment);
                // $dest = imagecreatetruecolor($img_w, $img_h);
                // imagecopy(
                //     $dest,
                //     $src,
                //     $img_t,
                //     $img_l,
                //     0,
                //     0,
                //     $img_w,
                //     $img_h
                // );

                // imagepng($dest, '2.png');

                // imagedestroy($dest);
                // imagedestroy($src);

                $name = $attachment->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . $name;

                if ($name) {
                    $attachment->moveTo($targetPath);
                }

                $image->image = $name;
            }

            if ($this->Image->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Image->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Image->patchEntity($image, $this->request->getData());
            if ($this->Image->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Image->get($id);
        if ($this->Image->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
