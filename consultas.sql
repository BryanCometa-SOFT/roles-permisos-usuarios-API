
-- Los usuarios que tengan el rol 1 y 2.
SELECT *
    FROM users AS u
        WHERE u.id_rol = 1
            OR u.id_rol = 2

-- Los permisos que se tienen del rol 1
SELECT p.*
    FROM roles_permisos AS rp,
        permisos AS p
        WHERE rp.id_rol = 2
            AND rp.id_permiso = p.id;

-- Los usuarios y el rol que tienen el permiso 2
SELECT u.*, r.*
    FROM users AS u,
        roles_permisos AS rp,
        roles AS r
        WHERE rp.id_permiso = 2
            AND u.id_rol = r.id
            AND u.id_rol = rp.id_rol;

