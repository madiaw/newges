<?php

include(base_path('routes/website.php'));
include(base_path('routes/auth.php'));
include(base_path('routes/role/admin.php'));
include(base_path('routes/role/company.php'));
include(base_path('routes/role/employee.php'));
include(base_path('routes/payment.php'));

include(base_path('routes/test.php'));

Routes::get('/', function(){
    return 'Deployed on Cloudways!';
}
);

Routes::get('/urses', function(){
    return User::all();
}
);
