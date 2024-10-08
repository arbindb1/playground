<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>

<body>

    <?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve(['homeroute' => route('faculty.homepage'),'sdroute' => route('faculty.list', ['token' => 'facultyList']),'stroute' => route('student.list', ['sttoken' => 'studentList']),'trash' => route('trash')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $attributes = $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $component = $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
        <div class="content">
    <div class="flex">
        <p class="flex-1">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora cupiditate in, facere voluptates,
            debitis natus voluptatum iste adipisci deleniti quae vero, architecto quidem odit perspiciatis dolores.
            Facere aspernatur rem voluptatem rerum recusandae autem est aliquam maxime, accusamus, sit ducimus corrupti
            quo at fuga ab id ipsam ea eius, vero labore! Velit vitae recusandae asperiores earum numquam dicta, eos
            sint! Numquam, quae eaque placeat, repellendus obcaecati in distinctio harum culpa aliquid ut suscipit,
            sequi expedita corrupti recusandae fugit alias eius. Rerum quasi aut amet asperiores fuga! Ratione dolores
            corporis quisquam illo quibusdam, perferendis veritatis aliquid quis ducimus, vel, magnam placeat explicabo
            officia ad corrupti molestiae expedita accusamus molestias natus excepturi nesciunt ipsam non reprehenderit
            hic! Eaque commodi architecto sit repellat maiores? Maiores libero nobis, voluptates, quod earum sapiente
            necessitatibus aliquid, blanditiis sunt hic delectus nihil? Soluta corrupti nihil vitae beatae sapiente in
            animi fuga deleniti ad culpa doloremque, hic praesentium magni odit. Aliquam corrupti cum architecto,
            tempore sapiente quaerat nihil laborum illo? Hic consequatur tenetur ut id quis! Corporis soluta atque
            deleniti expedita fuga nisi dolor reiciendis praesentium ut quasi dolorem perferendis rem veritatis odio
            dolores saepe, quos molestiae repellat voluptatum, esse fugit! Aliquam esse necessitatibus autem, voluptatem
            provident nesciunt hic quos. Sit ex, provident odio optio laboriosam perspiciatis iure minus vel delectus
            illo perferendis porro quibusdam ea deleniti veritatis alias vitae distinctio excepturi ducimus. Quo
            blanditiis asperiores quaerat. Animi sunt error, voluptatum quisquam fuga dolor tempora, ab repudiandae
            mollitia placeat nemo explicabo tenetur, quo consequuntur voluptate qui veritatis temporibus eum expedita
            dolorem recusandae delectus! Doloremque, vero illo ipsam facere ab, quo eveniet pariatur totam nesciunt
            blanditiis a tempore numquam et placeat nemo asperiores? Consequuntur porro atque quos eos voluptate. Nobis
            adipisci eaque iure obcaecati doloremque veritatis dolore quo aliquid necessitatibus dicta, quisquam,
            suscipit voluptatum neque! Repellendus eveniet velit, quia fugit fugiat, earum doloribus suscipit quibusdam
            temporibus odio labore consequuntur? Voluptate, vel animi porro quas optio nobis laboriosam unde quae
            officia impedit officiis aut explicabo repudiandae sunt nulla nam aspernatur aliquam error. Beatae quasi
            delectus quis ab, accusamus autem. Eligendi quisquam eius maiores quos commodi fugit minima natus itaque
            eaque quis corporis, tenetur velit nemo exercitationem expedita officia ab? Enim blanditiis deleniti
            eligendi maiores beatae ullam, repellat praesentium doloremque distinctio optio aperiam fuga sapiente
            aliquid? Recusandae iure corporis iste nisi consectetur ipsum et labore. Reiciendis accusamus at molestias
            dolorem ad sequi pariatur magni ratione illum natus necessitatibus corporis repudiandae maxime asperiores
            architecto alias dignissimos perspiciatis veritatis doloremque explicabo, unde deleniti, ea facilis!
            Sapiente, aut quisquam at veniam impedit maiores? Quae aperiam explicabo repellendus illum eius distinctio
            at maiores porro reiciendis dolore natus vero laborum non ad, quas quibusdam dolorum placeat assumenda
            tempora similique alias ratione eos incidunt? Nihil asperiores doloremque non itaque reiciendis impedit
            blanditiis, corporis, placeat eaque culpa suscipit voluptate maiores sunt numquam accusamus aperiam
            voluptatibus harum sapiente. Deleniti odit nostrum hic reiciendis laudantium? Ullam, iusto similique!
            Distinctio, ea, assumenda nobis magni accusantium iste est atque culpa eius dolorum libero. Vel non,
            excepturi ullam earum illo nobis perferendis quo dolores nemo error. Asperiores cum, sed aperiam maiores
            eveniet consectetur maxime illum necessitatibus fugit at nemo quam ipsum, voluptate hic, optio numquam dolor
            impedit distinctio tempore commodi omnis neque? Sequi facilis tempore, eum adipisci in illum laudantium fuga
            animi ullam dolorum unde quod nobis. Numquam voluptates asperiores labore maiores magni ex nihil commodi
            necessitatibus consequuntur illo ut ad, expedita distinctio mollitia vitae accusantium sed magnam facere
            velit hic impedit nostrum maxime! Explicabo inventore vero distinctio, commodi consequatur beatae harum ea
            est officiis deleniti amet dolorem nesciunt asperiores fuga ex reprehenderit itaque voluptatibus numquam
            rerum voluptate dicta facilis! Assumenda consequatur exercitationem dolorum, in dolorem natus commodi nulla
            est possimus! Ea dicta provident quam inventore reiciendis minus, ipsam asperiores temporibus laboriosam
            cupiditate sit, ex, consectetur non vero voluptatum excepturi eos enim quo facere consequuntur corporis nisi
            ut. Eaque officiis veritatis at natus quas? Quis sit doloremque inventore ab, tempora hic ipsum quaerat.
            Voluptates minima nulla temporibus cum dolorum quis, vel nihil nesciunt ipsum repellendus dolores a ut ipsam
            consequatur ullam impedit eveniet dolorem ad earum odio tempora, molestias labore? Architecto, velit cumque
            id obcaecati maiores minus, vitae mollitia saepe accusamus voluptate fugiat ducimus impedit quod deserunt
            debitis iste nisi ea illo natus tempora laudantium doloremque sapiente repudiandae in? Expedita, officiis
            officia ex labore dolorum enim consequatur dicta voluptatem, aliquid quos soluta modi ab amet vero
            laboriosam illum ad consectetur dolor eius magnam reprehenderit natus. Vero magnam officia consequuntur
            consectetur voluptate, ducimus itaque voluptatibus est dolorum sint neque labore voluptas ut minima quam
            quod molestias natus, cupiditate, commodi alias excepturi iure laudantium! Earum est nisi deserunt
            recusandae, soluta maiores quaerat, similique quas odio magnam beatae quod cumque iusto suscipit, dolore
            delectus nulla tempora aut nesciunt. Sit harum similique quod consequatur minus expedita fuga non debitis
            optio provident amet ea cumque reiciendis officia quia ipsam est sunt neque, quos laudantium. Quo tempore,
            dolorem quas maiores delectus, veritatis exercitationem iure iusto voluptates quae facere reiciendis autem
            nobis, ullam suscipit explicabo numquam voluptate veniam natus temporibus vitae laborum magnam ipsam! Neque
            quae eius animi magnam asperiores saepe a nam. Debitis nam temporibus aspernatur provident quae impedit eum
            voluptatum, doloremque quasi repellat ratione officiis reprehenderit culpa aperiam reiciendis exercitationem
            voluptate a officia illum iste necessitatibus quis pariatur! Consequatur quia similique odio! Repellendus a
            est accusantium inventore veritatis tenetur nulla quibusdam, eius molestiae vero dicta cum sit ullam
            accusamus enim possimus distinctio excepturi quod. Inventore, corporis quasi id reprehenderit architecto
            error soluta adipisci nemo nam? Veniam, beatae? Magni, nulla? Repudiandae minus ea blanditiis optio suscipit
            unde tempora impedit aliquam? Ipsum, unde deserunt autem reiciendis, illo vitae doloribus ab tempore
            pariatur maiores voluptatum vero sunt. Facere quidem sapiente molestiae nihil facilis a? Reiciendis quod
            nemo illum, aperiam laboriosam ratione maxime, itaque asperiores delectus omnis dolorum alias voluptatum ut
            libero cumque quos quis nisi minima. Odit accusamus libero aperiam voluptatem! Architecto optio dicta
            cupiditate similique sunt, perferendis distinctio aut reprehenderit ea deleniti. Aperiam, voluptates dolore
            illum corporis magni excepturi animi laudantium, fugiat voluptatibus odio adipisci a quos sed ipsum
            pariatur.
        </p>
    </div>
</div>
</body>

</html>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/homepage.blade.php ENDPATH**/ ?>