PGDMP                         {            login    14.5    14.5     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    49162    login    DATABASE     b   CREATE DATABASE login WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Mexico.1252';
    DROP DATABASE login;
                postgres    false            �            1259    65547    alumno    TABLE     �   CREATE TABLE public.alumno (
    id_alumno bigint NOT NULL,
    nombre text,
    apellido_paterno text,
    apellido_materno text,
    telefono text,
    motivo text,
    email text
);
    DROP TABLE public.alumno;
       public         heap    postgres    false            �            1259    65546    alumno_id_alumno_seq    SEQUENCE     }   CREATE SEQUENCE public.alumno_id_alumno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.alumno_id_alumno_seq;
       public          postgres    false    212            �           0    0    alumno_id_alumno_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.alumno_id_alumno_seq OWNED BY public.alumno.id_alumno;
          public          postgres    false    211            �            1259    49163    persona    TABLE     �   CREATE TABLE public.persona (
    id_persona bigint NOT NULL,
    nombre text,
    p_apellido text,
    s_apellido text,
    fecha_nacimiento date
);
    DROP TABLE public.persona;
       public         heap    postgres    false            �            1259    49170    usuario    TABLE     [   CREATE TABLE public.usuario (
    correo text,
    password text,
    id_persona bigint
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            d           2604    65550    alumno id_alumno    DEFAULT     t   ALTER TABLE ONLY public.alumno ALTER COLUMN id_alumno SET DEFAULT nextval('public.alumno_id_alumno_seq'::regclass);
 ?   ALTER TABLE public.alumno ALTER COLUMN id_alumno DROP DEFAULT;
       public          postgres    false    212    211    212            �          0    65547    alumno 
   TABLE DATA           p   COPY public.alumno (id_alumno, nombre, apellido_paterno, apellido_materno, telefono, motivo, email) FROM stdin;
    public          postgres    false    212   r       �          0    49163    persona 
   TABLE DATA           _   COPY public.persona (id_persona, nombre, p_apellido, s_apellido, fecha_nacimiento) FROM stdin;
    public          postgres    false    209   �       �          0    49170    usuario 
   TABLE DATA           ?   COPY public.usuario (correo, password, id_persona) FROM stdin;
    public          postgres    false    210   �                   0    0    alumno_id_alumno_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.alumno_id_alumno_seq', 1, false);
          public          postgres    false    211            h           2606    65554    alumno alumno_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.alumno
    ADD CONSTRAINT alumno_pkey PRIMARY KEY (id_alumno);
 <   ALTER TABLE ONLY public.alumno DROP CONSTRAINT alumno_pkey;
       public            postgres    false    212            f           2606    49169    persona persona_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (id_persona);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public            postgres    false    209            i           2606    49175    usuario id_persona    FK CONSTRAINT     ~   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT id_persona FOREIGN KEY (id_persona) REFERENCES public.persona(id_persona);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT id_persona;
       public          postgres    false    210    3174    209            �      x������ � �      �   0   x�3�,N-J���,K�II��L�/J�/K�4202�50�54����� R
�      �   #   x�KL���s��,K�K���442"NC�=... �d�     