class EmpModel {
  String? id;
  String? firstname;
  String? lastname;
  EmpModel({
    this.id,
    this.firstname,
    this.lastname,
  });

  factory EmpModel.fromJson(Map<String, dynamic> json) {
    return EmpModel(
      id: json['_id'] as String,
      firstname: json['firstname'] as String,
      lastname: json['lastname'] as String,
    );
  }
}
