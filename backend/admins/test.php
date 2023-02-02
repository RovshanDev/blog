<?php

$value = [];

$name = 'ad';
$surname = 'soyad';
$username = 'dad';
$email = 'bad';
$password = 12345;
$status = 1;
function test($value = []){
    $value=implode(',',$value);
    return $value;
}

var_dump(test(["$name","$surname","$password"]));

public function update($table,$value = [],$id){
    $keys = implode(',',array_keys($value));
    $value=implode("','",$value);
    $update = 'UPDATE '.$table.' SET ';
    for($i = 0; $i < count($value); $i++){
        if(is_string($value[$keys[$i]]))
        {
            $update .= $keys[$i].'="'.$value[$keys[$i]].'"';
        }
        else
        {
            $update .= $keys[$i].'='.$value[$keys[$i]];
        }
        if($i != count($value)-1)
        {
            $update .= ',';
        }
    }
    $update=" WHERE id=".$id;

    $ins=$this->db->query($update);


}

$update = 'UPDATE '.$table.' SET ';
$keys = array_keys($value);
foreach ($value as $key=>$val){
    $update .=$key.'="'.$val[$key].'"';
    if(next($value)) {$update .= ",";}
}

$query = $this->connection->query($sql);

if($query->num_rows > 0){
    $row = $query->fetch_array();
    return $row['id'];
}
else{
    return false;
}

public function create(){

    if($this->input->post()){

        $new_name = time().''.rand(1,1000);
//            $path  = base_url().'uploads/';
        $config = [
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => $new_name
        ];

        $this->load->library('upload',$config);
//         $brand_file = $this->upload->data('file_name');
//         print_r($brand_file);

        if ( ! $this->upload->do_upload('logo'))
        {
            $error = array('error' => $this->upload->display_errors());

//                $this->load->view('upload_form', $error);
        }
        else
        {
//                $data = array('upload_data' => $this->upload->data());
//
//                $this->load->view('upload_success', $data);

            $brand_file = $this->upload->data('file_name');
            print_r($brand_file);
            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'logo' => $brand_file
            ];
            $insert_id = $this->bd_md->insert($request_data);
            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

//                redirect('backend/brands');
            }







//                redirect('backend/brands');
        }


    }



    $data['title'] = 'Brands List';

    $this->load->admin('brands/create',$data);

}


<!--Block Spotlight4  -->
<div class="so-spotlight4">
    <div class="container">
        <div class="row">
            <div class="module so-latest-blog latest-blog col-md-4 col-sm-6 col-xs-12">
                <h3 class="modtitle"><span>News Updates</span></h3>
                <div id="so_latest_blog_180" class="so-blog-external button-type2 button-type2">
                    <div class="blog-external-simple">
                        <div class="media">
                            <div class="item">
                                <div class="media-body">

                                    <div class="media-date-added">28<br>
                                        <span>Mar</span>
                                    </div>
                                    <div class="media-content">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.html" title="Ac tincidunt Suspendisse malesuada" target="_blank">Pellentse tincidunt Suspendis malesu</a>
                                        </h4>
                                        <div class="description">
Commodo laoreet semper tincidunt lorem Vestibulum nunc at In
                                            Curabitur magna.....
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item">
                                <div class="media-body">

                                    <div class="media-date-added">01<br>
                                        <span>Sep</span>
                                    </div>
                                    <div class="media-content">
                                        <h4 class="media-heading">
                                            <a href="blog-detail.html" title="Biten demonstraverunt lector legere legunt saepius" target="_blank">Biten demonst raverunt lector legere </a>
                                        </h4>
                                        <div class="description">
Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Eu.....
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bestseller col-md-4 col-sm-6 col-xs-12">
                <div class="bestseller-inner">
                    <div>
                        <h3>Bestsellers</h3>
                        <div class="product-layout ">
                            <div class="product-thumb transition">
                                <div class="image"><a href="product.html"><img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/shop/product/b1.jpg"  title="Duidem rerum facilis" alt="Apple Cinema 30" /></a></div>
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <h4><a href="product.html">Fuzan Sumata masen itcute</a></h4>

                                    <p class="price">
                                        <span class="price-new"> $88.00</span>
                                        <span class="price-old">$129.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-thumb transition">
                                <div class="image"><a href="product.html"><img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/shop/product/b2.png"  title="Duidem rerum facilis" alt="Apple Cinema 30" /></a></div>
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

                                    <p class="price">
                                        <span class="price-new"> $123.00</span>
                                        <span class="price-old">$159.00</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module testimonial col-md-4 col-sm-12 col-xs-12">
                <div class="clients_say">
                    <div class="block-title"><h3>Testimonial</h3></div>
                    <div class="slider-clients-say">
                        <div class="block_content">
                            <div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/cms/clients_say.png" alt="">
                            </div>
                            <div class="block-info">
                                <div class="text">"Aliquam ut tellus dignissim, cursus erat ultricies tellus cursus erat ultricies tellus.. Nulla tempus sollicitudin mauris cursus dictum. Commodo laoreet semper lorem."</div>
                                <div class="info">
                                    <div class="author">- BonBon Supper</div>
                                </div>
                            </div>
                        </div>
                        <div class="block_content">
                            <div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/cms/clients_say.png" alt="">
                            </div>
                            <div class="block-info">
                                <div class="text">"Dignissim ut tellus Aliquam, cursus erat ultricies tellus cursus erat ultricies tellus.. Nulla tempus sollicitudin mauris cursus dictum. Commodo laoreet semper  lorem."</div>
                                <div class="info">
                                    <div class="author">- Aliquam Tellus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Block Spotlight5  -->
<div class="so-spotlight5">
    <div class="container">
        <div class="block-brand">
            <div class="brand-slider">
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/2.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/3.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/4.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/5.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/2.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/3.jpg" alt="img">
                    </a>
                </div>
                <div class="item-manu">
                    <a href="#" title="Link">
                        <img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/brands/9.jpg" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</main >

