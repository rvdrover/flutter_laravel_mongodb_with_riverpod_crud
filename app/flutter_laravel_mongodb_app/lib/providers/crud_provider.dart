
import 'package:flutter_laravel_mongodb_app/providers/crud_notifier.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';

final crudProvider =
    StateNotifierProvider<CrudNotifier, Crud>((ref) => CrudNotifier());
